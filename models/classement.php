<?php
require('utils/db.php');

function getClassement()
{
    $db = dbConnect();

    $stmt = $db->prepare("SELECT  @rank := @rank + 1 as p, q.*
        FROM (
            SELECT teams.short_name,(w * 3) + d as pts,gp,w,d,l,score_for gf, score_against ga, score_for - score_against gd
            FROM  teams
            inner join
            (select team, sum(score_home) score_for
            from
            (select id_team_home as team, score_home
                from matchs
                WHERE matchs.score_home IS NOT NULL AND matchs.score_away IS NOT NULL
                union all
                select id_team_away, score_away
                from matchs
                WHERE matchs.score_home IS NOT NULL AND matchs.score_away IS NOT NULL
            ) qq
            group by team
        ) q1
        on teams.id = q1.team
        inner join
        (select id_team_home as team, sum(score_away) score_against
        from
        (select id_team_home, score_away
            from matchs
            WHERE matchs.score_home IS NOT NULL AND matchs.score_away IS NOT NULL
            union all
            select id_team_away, score_home
            from matchs
            WHERE matchs.score_home IS NOT NULL AND matchs.score_away IS NOT NULL
        ) qq
        group by team
    ) q2
    on teams.id = q2.team
    inner join
    (SELECT id_team_home as team, count(case when result = 1 then result end) w, count(case when result = 0 then result end) d, count(case when result = -1 then result end) l
    FROM
    (SELECT m.id_team_home, case when m.score_home > m.score_away then 1 when m.score_home = m.score_away then 0 else -1 end result
        FROM matchs AS m
        WHERE m.score_home IS NOT NULL AND m.score_away IS NOT NULL
        UNION ALL SELECT m.id_team_away, case when m.score_away > m.score_home then 1 when m.score_away = m.score_home then 0 else -1 end result
        FROM matchs AS m
        WHERE m.score_home IS NOT NULL AND m.score_away IS NOT NULL ) qq
        GROUP BY team
    ) q3
    on teams.id = q3.team
    inner join
    (select team, count(*) gp
    from
    (select id_team_home as team
        from matchs
        WHERE matchs.score_home IS NOT NULL AND matchs.score_away IS NOT NULL
        union all
        select id_team_away as team
        from matchs
        WHERE matchs.score_home IS NOT NULL AND matchs.score_away IS NOT NULL
    ) qq
    group by team
) q4
on teams.id = q4.team

order by pts desc,gd desc,gf desc
) q, (select @rank := 0) z ");

$stmt->execute();

return $stmt->fetchAll();
}
?>
