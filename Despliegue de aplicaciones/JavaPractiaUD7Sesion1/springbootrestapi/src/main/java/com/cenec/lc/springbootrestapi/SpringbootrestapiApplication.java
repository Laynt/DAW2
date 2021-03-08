package com.cenec.lc.springbootrestapi;

import com.cenec.lc.springbootrestapi.entities.Course;
import com.cenec.lc.springbootrestapi.entities.Instructor;
import com.cenec.lc.springbootrestapi.repositories.CourseRepository;
import com.cenec.lc.springbootrestapi.repositories.InstructorRepository;

import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;
import org.springframework.data.jpa.repository.config.EnableJpaAuditing;

@SpringBootApplication

@EnableJpaAuditing // Enabling JPA Auditing
public class SpringbootrestapiApplication {
 
    public static void main(String[] args) {
        SpringApplication.run(SpringbootrestapiApplication.class, args);
    }
 
    @Bean
    public CommandLineRunner seedDatabase(CourseRepository courseRepository,
            InstructorRepository instructorRepository) {
        return args -> {
 
            if (instructorRepository.count() == 0) {
                // create a new Instructor
                Instructor instructor = new Instructor("Juan", "Rodriguez", "juan@hola.es");
 
                // save the book
                instructor = instructorRepository.save(instructor);
 
                // create and save new courses
                courseRepository.save(new Course("Desarrollo web servidor", instructor));
                courseRepository.save(new Course("Desarrollo de interfaces", instructor));
                courseRepository.save(new Course("Desarrollo web cliente", instructor));
            }
        };
    }
 
}
