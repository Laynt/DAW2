package com.cenec.lc.springbootrestapi.repositories;

import java.util.Optional;

import com.cenec.lc.springbootrestapi.entities.Course;

import org.springframework.boot.autoconfigure.data.web.SpringDataWebProperties.Pageable;
import org.springframework.data.domain.Page;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

@Repository
public interface CourseRepository extends JpaRepository<Course, Long> {
    
    Page<Course> findByInstructorId(Long instructorId, org.springframework.data.domain.Pageable pageable);
    Optional<Course> findByIdAndInstructorId(Long id, Long instructorId);
 
}
