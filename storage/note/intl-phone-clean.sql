/* GB | United Kingdom */
SELECT * FROM  tbl_client_phone WHERE LENGTH(phone) = '12' AND phone LIKE '447%' OR phone LIKE '442%' WHEN phone LIKE '447%' THEN type = 'Mobile' WHEN phone LIKE '442%' THEN type = 'Telephone' ORDER BY phone ASC
/* DK | Denmark */
SELECT * FROM  tbl_client_phone WHERE LENGTH(phone) = '10' AND phone LIKE '45%' ORDER BY phone ASC

SELECT * FROM  tbl_client_phone WHERE LENGTH(phone) = '12' AND phone LIKE '491%' OR phone LIKE '4969%' ORDER BY phone ASC

SELECT * FROM  tbl_client_phone WHERE LENGTH(phone) = '12' AND phone LIKE '491%' OR phone LIKE '4969%' ORDER BY phone ASC

SELECT * FROM  tbl_client_phone WHERE LENGTH(phone) = '12' AND phone LIKE '491%' OR phone LIKE '4969%' ORDER BY phone ASC

SELECT * FROM  tbl_client_phone WHERE LENGTH(phone) = '12' AND phone LIKE '491%' OR phone LIKE '4969%' ORDER BY phone ASC

SELECT * FROM  tbl_client_phone WHERE LENGTH(phone) = '12' AND phone LIKE '491%' OR phone LIKE '4969%' ORDER BY phone ASC
