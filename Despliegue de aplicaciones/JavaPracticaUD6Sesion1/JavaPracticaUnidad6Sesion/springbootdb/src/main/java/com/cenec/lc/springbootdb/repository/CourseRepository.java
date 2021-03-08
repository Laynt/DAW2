public interface CourseRepository extends CrudRepository<Course, Long>  { 
    List<Course> findByName(String name);    
}
