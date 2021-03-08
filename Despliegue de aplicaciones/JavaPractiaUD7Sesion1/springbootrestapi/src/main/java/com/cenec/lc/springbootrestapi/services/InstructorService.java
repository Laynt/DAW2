package com.cenec.lc.springbootrestapi.services;

import com.cenec.lc.springbootrestapi.entities.Instructor;

import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;


public interface InstructorService {
 
    Page<Instructor> findAll(Pageable pageable);
 
    Instructor findById(Long instructorId) throws EntityNotFoundException;
 
    Instructor create(Instructor instructorData);
 
    Instructor update(Long instructorId, Instructor instructorData) throws EntityNotFoundException;
 
    void deleteById(Long instructorId) throws EntityNotFoundException;
 
}
