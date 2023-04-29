-- With user_id and results

SELECT 
    u.user_id,
    AVG(correct) AS avg_correct_ans,
    MAX(time_taken) AS recent_time_taken
FROM
    user u
        LEFT JOIN
    test_result tr ON u.user_id = tr.user_id
GROUP BY u.user_id;


-- With all the entry from user table and results

SELECT 
    user.*, results.avg_correct_ans, results.recent_time_taken
FROM
    user
        JOIN
    (SELECT 
        u.user_id,
            AVG(correct) AS avg_correct_ans,
            MAX(time_taken) AS recent_time_taken
    FROM
        user u
    LEFT JOIN test_result tr ON u.user_id = tr.user_id
    GROUP BY u.user_id) results ON results.user_id = user.user_id;