package com.cenec.lc.springbootrestapi.controllers;

import java.util.HashMap;
import java.util.Map;

import javax.validation.Valid;

import com.cenec.lc.springbootrestapi.entities.Instructor;
import com.cenec.lc.springbootrestapi.services.EntityNotFoundException;
import com.cenec.lc.springbootrestapi.services.InstructorService;

import org.springframework.beans.factory.annotation.Autowired;

import org.springframework.data.domain.Page;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import org.springframework.data.domain.Pageable;

@RestController
@RequestMapping("/api")
public class InstructorController {
 
    @Autowired
    private InstructorService instructorService;
 
    @GetMapping("/instructors")
    public Page<Instructor> getInstructors(Pageable pageable) {
        return instructorService.findAll(pageable);
    }
 
    @GetMapping("/instructors/{id}")
    public ResponseEntity<Instructor> getInstructorById(@PathVariable(value = "id") Long instructorId)
            throws ResourceNotFoundException {
 
        try {
            Instructor instructor = instructorService.findById(instructorId);
            return ResponseEntity.ok().body(instructor);
        } catch (EntityNotFoundException e) {
            throw new ResourceNotFoundException(e);
        }
 
    }
 
    @PostMapping("/instructors")
    public Instructor createUser(@Valid @RequestBody Instructor instructorRequest) {
        return instructorService.create(instructorRequest);
    }
 
    @PutMapping("/instructors/{id}")
    public ResponseEntity<Instructor> updateUser(@PathVariable(value = "id") Long instructorId,
            @Valid @RequestBody Instructor instructorRequest) throws ResourceNotFoundException {
 
        try {
            Instructor updatedInstructor = instructorService.update(instructorId, instructorRequest);
            return ResponseEntity.ok(updatedInstructor);
        } catch (EntityNotFoundException e) {
            throw new ResourceNotFoundException(e);
        }
 
    }
 
    @DeleteMapping("/instructors/{id}")
    public Map<String, Boolean> deleteUser(@PathVariable(value = "id") Long instructorId)
            throws ResourceNotFoundException {
 
        try {
            instructorService.deleteById(instructorId);
            Map<String, Boolean> response = new HashMap<>();
            response.put("deleted", Boolean.TRUE);
            return response;
        } catch (EntityNotFoundException e) {
            throw new ResourceNotFoundException(e);
        }
 
    }
 
}
