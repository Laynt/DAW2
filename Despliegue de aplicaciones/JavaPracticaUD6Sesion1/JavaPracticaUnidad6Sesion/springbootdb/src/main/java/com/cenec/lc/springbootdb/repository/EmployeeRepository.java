package com.cenec.lc.springbootdb.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.cenec.lc.springbootdb.model.Employee;




@Repository
public interface EmployeeRepository extends JpaRepository<Employee, Long>{

}