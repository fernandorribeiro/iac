var mysql      = require('mysql');
var connection = mysql.createConnection({
    host     : 'bra-mysqlserver.mysql.database.azure.com',
    database : 'bra-mysqlserverdb',
    user     : 'adminuser@bra-mysqlserver',
    password : 'Password123!',
});

connection.connect(function(err) {
    if (err) {
        console.error('Error connecting: ' + err.stack);
        return;
    }

    console.log('Connected as id ' + connection.threadId);
});

connection.query('SELECT * FROM employee', function (error, results, fields) {
    if (error)
        throw error;

    results.forEach(result => {
        console.log(result);
    });
});

connection.end();

