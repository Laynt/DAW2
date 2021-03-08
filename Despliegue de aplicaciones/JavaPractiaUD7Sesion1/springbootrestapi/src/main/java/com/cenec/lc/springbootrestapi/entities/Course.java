package com.cenec.lc.springbootrestapi.entities;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.FetchType;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.JoinColumn;
import javax.persistence.ManyToOne;
import javax.persistence.Table;

import com.fasterxml.jackson.annotation.JsonIdentityInfo;
import com.fasterxml.jackson.annotation.JsonIdentityReference;
import com.fasterxml.jackson.annotation.JsonProperty;
import com.fasterxml.jackson.annotation.ObjectIdGenerators;

import org.hibernate.annotations.OnDelete;
import org.hibernate.annotations.OnDeleteAction;

@Entity
@Table(name = "course")
public class Course extends Audit {
    
    private static final long serialVersionUID = 1L;
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id")
    private Long id;
 
    @Column(name = "title", unique = true)
    private String title;
    
    @ManyToOne(fetch = FetchType.LAZY, optional = false) // Relacion de muchos a uno, siendo uno le instructor
    @JoinColumn(name = "instructor_id", nullable = false)  // Representa la foreign key
    @OnDelete(action = OnDeleteAction.CASCADE)  // A la hora de borrar un instructor borra todos los cursos asociados
    @JsonIdentityInfo(generator = ObjectIdGenerators.PropertyGenerator.class, property = "id") // indico que solo quiero mostrar el id en json
    @JsonIdentityReference(alwaysAsId = true) // indico que solo quiero mostrar el id en json
    @JsonProperty("instructor_id") // indico que solo quiero mostrar el id en json
    private Instructor instructor; // Meto el instrucctor dentro del curso
 
    public Course(String title, Instructor instructor) {
        this.title = title;
        this.instructor = instructor;
        if (instructor == null){
            new RuntimeException("Instructor cannot be null");
        }
    }
 
    public Long getId() {
        return id;
    }
 
    public void setId(Long id) {
        this.id = id;
    }
 
    public String getTitle() {
        return title;
    }
 
    public void setTitle(String title) {
        this.title = title;
    }
 
    public Instructor getInstructor() {
        return instructor;
    }
    
    public void setInstructor(Instructor instructor) {
        this.instructor = instructor;
    }
 
    @Override
    public String toString() {
        return "Course [id=" + id + ", title=" + title + "]";
    }
}
