import mysql from 'mysql2/promise';

const conn = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    database: 'HR'
});

module.exports = conn;