package com.cenec.lc.springbootrestapi.services;

import java.util.Optional;

import com.cenec.lc.springbootrestapi.entities.Course;
import com.cenec.lc.springbootrestapi.entities.Instructor;
import com.cenec.lc.springbootrestapi.repositories.CourseRepository;
import com.cenec.lc.springbootrestapi.repositories.InstructorRepository;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.autoconfigure.data.web.SpringDataWebProperties.Pageable;
import org.springframework.data.domain.Page;
import org.springframework.stereotype.Service;

@Service
public class CourseServiceImpl implements CourseService {
 
    @Autowired
    private CourseRepository courseRepository;
 
    @Autowired
    private InstructorRepository instructorRepository;
 
    public Page<Course> findByInstructorId(Long instructorId, Pageable pageable) {
        return courseRepository.findByInstructorId(instructorId, pageable);
    }
 
    public Course create(Long instructorId, Course courseData) throws EntityNotFoundException {
 
        Optional<Instructor> instructor = instructorRepository.findById(instructorId);
 
        if (instructor.isPresent()) {
            courseData.setInstructor(instructor.get());
            return courseRepository.save(courseData);
        } else {
            throw new EntityNotFoundException("Instructor with id " + instructorId + " not found");
        }
 
    }
 
    public Course update(Long courseId, Long instructorId, Course courseData) throws EntityNotFoundException {
 
        if (!instructorRepository.existsById(instructorId)) {
            throw new EntityNotFoundException("Instructor with id " + instructorId + " not found");
        }
 
        Optional<Course> loadCourse = courseRepository.findById(instructorId);
        if (loadCourse.isPresent()) {
            Course course = loadCourse.get();
            course.setTitle(courseData.getTitle());
            return courseRepository.save(course);
        } else {
            throw new EntityNotFoundException("Course with id " + courseId + " not found");
        }
 
    }
 
    public void deleteByCourseIdAndInstructorId(Long courseId, Long instructorId) throws EntityNotFoundException {
 
        Optional<Course> loadCourse = courseRepository.findByIdAndInstructorId(courseId, instructorId);
 
        if (loadCourse.isPresent()) {
            Course course = loadCourse.get();
            courseRepository.delete(course);
        } else {
            throw new EntityNotFoundException(
                    "Course with id " + courseId + " and instructorId " + instructorId + " not found");
        }
 
    }

   
 
}
