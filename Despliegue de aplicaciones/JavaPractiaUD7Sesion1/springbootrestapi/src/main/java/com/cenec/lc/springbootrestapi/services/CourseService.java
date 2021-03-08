package com.cenec.lc.springbootrestapi.services;

import com.cenec.lc.springbootrestapi.entities.Course;


import org.springframework.data.domain.Page;

public interface CourseService {
    
    Page<Course> findByInstructorId(Long instructorId, org.springframework.data.domain.Pageable pageable);
 
    Course create(Long instructorId, Course courseData) throws EntityNotFoundException;
 
    Course update(Long courseId, Long instructorId, Course courseData) throws EntityNotFoundException;
 
    void deleteByCourseIdAndInstructorId(Long courseId, Long instructorId) throws EntityNotFoundException;
}
