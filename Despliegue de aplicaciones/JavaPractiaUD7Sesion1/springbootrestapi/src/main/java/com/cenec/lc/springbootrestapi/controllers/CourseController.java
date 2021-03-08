package com.cenec.lc.springbootrestapi.controllers;

import javax.validation.Valid;

import com.cenec.lc.springbootrestapi.entities.Course;
import com.cenec.lc.springbootrestapi.services.CourseService;
import com.cenec.lc.springbootrestapi.services.EntityNotFoundException;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.Pageable;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.DeleteMapping;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.PutMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/api")
public class CourseController {
 
    @Autowired
    private CourseService courseService;
 
    @GetMapping("/instructors/{instructorId}/courses")
    public Page<Course> getCoursesByInstructor(@PathVariable(value = "instructorId") Long instructorId,
            Pageable pageable) {
        return courseService.findByInstructorId(instructorId, pageable);
    }
 
    @PostMapping("/instructors/{instructorId}/courses")
    public Course createCourse(@PathVariable(value = "instructorId") Long instructorId,
            @Valid @RequestBody Course course) throws ResourceNotFoundException {
 
        try {
            return courseService.create(instructorId, course);
        } catch (EntityNotFoundException e) {
            throw new ResourceNotFoundException(e);
        }
 
    }
 
    @PutMapping("/instructors/{instructorId}/courses/{courseId}")
    public Course updateCourse(@PathVariable(value = "instructorId") Long instructorId,
            @PathVariable(value = "courseId") Long courseId, @Valid @RequestBody Course courseRequest)
            throws ResourceNotFoundException {
 
        try {
            return courseService.update(courseId, instructorId, courseRequest);
        } catch (EntityNotFoundException e) {
            throw new ResourceNotFoundException(e);
        }
    }
 
    @DeleteMapping("/instructors/{instructorId}/courses/{courseId}")
    public ResponseEntity<?> deleteCourse(@PathVariable(value = "instructorId") Long instructorId,
            @PathVariable(value = "courseId") Long courseId) throws ResourceNotFoundException {
 
        try {
            courseService.deleteByCourseIdAndInstructorId(courseId, instructorId);
            return ResponseEntity.ok().build();
        } catch (EntityNotFoundException e) {
            throw new ResourceNotFoundException(e);
        }
 
    }
 
}
