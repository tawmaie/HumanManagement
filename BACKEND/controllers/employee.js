const Employee = require('../models/employee');

exports.getAllEmployees = async (req, res) => {
    try {
        const employees = await Employee.all();
        res.json(employees);
    }
    catch (error) {
        res.status(500).json({ message: error.message });
    }
}