drop table investments;

CREATE TABLE investments (
    id varchar(5),
    companyId varchar(50),
    symbol varchar(10),
    issuerName varchar(30),
    cl varchar(30),
    cusip varchar(10),
    sharesValue decimal(18,7),
    percentage decimal(18,7),
    shares decimal(18,7),
    PRIMARY KEY (ID) 
);

INSERT INTO investments (id, companyId, symbol, issuerName, cl, cusip, sharesValue, percentage,shares)
VALUES ('$id', '$companyId', '$symbol', '$issuerName', '$cl', '$cusip', 0.0, 0.0,0.0);