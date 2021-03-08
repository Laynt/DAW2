@Entity
public class Student {
    
    @Id
    @GeneratedValue(strategy=GenerationType.AUTO)   
    private long id;    
    
    @Column
    private String firstName;   
 
    @Column 
    private String lastName;
 
    @Column
    private String department;   
    
    @Column 
    private String email;    
    
    @ManyToMany(cascade = CascadeType.MERGE)
    @JoinTable(name = "student_course", joinColumns = { @JoinColumn(name = "id") }, inverseJoinColumns = { @JoinColumn(name = "courseid") })
    private Set<Course> courses = new HashSet<>();  
   
    public long getId() {
        return id;
    }
 
    public void setId(long id) {
        this.id = id;
    }
 
    public String getFirstName() {
        return firstName;
    }
 
    public void setFirstName(String firstName) {
        this.firstName = firstName;
    }
 
 
    public String getLastName() {
        return lastName;
    }
 
    public void setLastName(String lastName) {
        this.lastName = lastName;
    }
 
 
    public String getDepartment() {
        return department;
    }
 
    public void setDepartment(String department) {
        this.department = department;
    }
  
    public String getEmail() {
        return email;
    }
 
    public void setEmail(String email) {
        this.email = email;
    }   
 
    
    public Set<Course> getCourses() {
        return this.courses;
    }
 
    public void setCourses(Set<Course> courses) {
        this.courses = courses;
    }
    
    public boolean hasCourse(Course course) {
        for (Course studentCourse: getCourses()) {
            if (studentCourse.getCourseid() == course.getCourseid()) {
                return true;
            }
        }
        return false;
    }   
 
}
