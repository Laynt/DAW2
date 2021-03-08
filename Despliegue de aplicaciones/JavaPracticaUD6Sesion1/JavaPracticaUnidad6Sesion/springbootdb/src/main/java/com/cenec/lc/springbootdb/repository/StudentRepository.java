public interface StudentRepository extends CrudRepository<Student, Long> {    
    List<Student> findByLastName(String lastname);
}
