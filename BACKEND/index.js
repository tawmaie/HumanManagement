const express = require('express');
const app = express();
const port = 3000;

const employeeController = require('./controllers/employee');

app.get('/', (req, res) => {
    res.send('Hello World!');
});

app.get('/employee/all', (req, res) => {employeeController.getAllEmployees(req, res)});

app.listen(port, () => {
    console.log(`Listening at http://localhost:${port}`);
}); 