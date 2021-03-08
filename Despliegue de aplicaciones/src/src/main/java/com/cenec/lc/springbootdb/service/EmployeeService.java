package com.cenec.lc.springbootdb.service;

import java.util.List;

import com.cenec.lc.springbootdb.model.Employee;



public interface EmployeeService {
    List<Employee> getAllEmployees();
    void saveEmployee(Employee employee);
    Employee getEmployeeById(long id);
    void deleteEmployeeById(long id);
}