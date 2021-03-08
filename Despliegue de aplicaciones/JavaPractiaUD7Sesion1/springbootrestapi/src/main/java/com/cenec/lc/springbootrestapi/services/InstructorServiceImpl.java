package com.cenec.lc.springbootrestapi.services;

import java.util.Optional;

import com.cenec.lc.springbootrestapi.entities.Instructor;
import com.cenec.lc.springbootrestapi.repositories.InstructorRepository;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.stereotype.Service;

@Service
public class InstructorServiceImpl implements InstructorService {
 
    @Autowired
    private InstructorRepository instructorRepository;
 
    public Page<Instructor> findAll(Pageable pageable) {
        return instructorRepository.findAll(pageable);
    }
 
    public Instructor findById(Long instructorId) throws EntityNotFoundException {
 
        Optional<Instructor> loadInstructor = instructorRepository.findById(instructorId);
        if (loadInstructor.isPresent()) {
            return loadInstructor.get();
        } else {
            throw new EntityNotFoundException("Instructor with id " + instructorId + " not found");
        }
    }
 
    public Instructor create(Instructor instructorData) {
        return instructorRepository.save(instructorData);
    }
 
    public Instructor update(Long instructorId, Instructor instructorData) throws EntityNotFoundException {
 
        Instructor loadInstructor = this.findById(instructorId);
 
        loadInstructor.setFirstName(instructorData.getFirstName());
        loadInstructor.setLastName(instructorData.getLastName());
        loadInstructor.setEmail(instructorData.getEmail());
        return instructorRepository.save(loadInstructor);
 
    }
 
    public void deleteById(Long instructorId) throws EntityNotFoundException {
 
        Instructor loadInstructor = this.findById(instructorId);
 
        instructorRepository.delete(loadInstructor);
    }
 
}
