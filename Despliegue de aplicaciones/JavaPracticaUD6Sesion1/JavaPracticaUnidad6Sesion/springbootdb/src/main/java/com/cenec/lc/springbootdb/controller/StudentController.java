import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class StudentController {
 
    @Autowired
    private StudentRepository repository;
 
    @Autowired
    private CourseRepository crepository;
 
    @RequestMapping("/students")
    public String index(Model model) {
        List<Student> students = (List<Student>) repository.findAll();
        model.addAttribute("students", students);
        return "students/index";
    }
 
    @RequestMapping(value = "add")
    public String addStudent(Model model) {
        model.addAttribute("student", new Student());
        return "students/addStudent";
    }
 
    @RequestMapping(value = "save", method = RequestMethod.POST)
    public String save(Student student) {
        repository.save(student);
        return "redirect:/students";
    }
 
    @RequestMapping(value = "/delete/{id}", method = RequestMethod.GET)
    public String editRemoveEmployee(@PathVariable("id") Long studentId, Model model) {
        repository.deleteById(studentId);
        return "redirect:/students";
    }
 
    @RequestMapping(value = "addStudentCourse/{id}", method = RequestMethod.GET)
    public String addCourse(@PathVariable("id") Long studentId, Model model) {
        model.addAttribute("courses", crepository.findAll());
        model.addAttribute("student", repository.findById(studentId).get());
        return "students/addStudentCourse";
    }
 
    @RequestMapping(value = "/student/{id}/courses", method = RequestMethod.GET)
    public String studentsAddCourse(@PathVariable Long id, @RequestParam Long courseId, Model model) {
        Course course = crepository.findById(courseId).get();
        Student student = repository.findById(id).get();
 
        if (student != null) {
            if (!student.hasCourse(course)) {
                student.getCourses().add(course);
            }
            repository.save(student);
            model.addAttribute("student", student);
            model.addAttribute("courses", crepository.findAll());
            return "redirect:/students";
        }
 
        return "redirect:/students";
    }
 
    @RequestMapping(value = "getstudents", method = RequestMethod.GET)
    public @ResponseBody List<Student> getStudents() {
        return (List<Student>) repository.findAll();
    }
 
    @RequestMapping("/createcourses")
    public String createCourses() {
        crepository.save(new Course("Marketing 1"));
        crepository.save(new Course("Marketing 2"));            
        crepository.save(new Course("Programming Java"));
        crepository.save(new Course("Spring Boot basics"));         
        return "¡Cursos creados!";
    }
}
