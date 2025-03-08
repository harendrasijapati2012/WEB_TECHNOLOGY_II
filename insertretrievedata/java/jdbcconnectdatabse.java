import java.sql.*;

public class StudentJDBC {
    public static void main(String[] args) {
        try {
            // Step 1: Load JDBC Driver
            Class.forName("com.mysql.cj.jdbc.Driver");

            // Step 2: Establish Connection
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/STU_DB", "root", "");

            // Step 3: Create Statement
            Statement stmt = con.createStatement();

            // Step 4: Insert Data
            String insertQuery = "INSERT INTO student (stuid, stuname, address, joindate, faculty, fee) " +
                                 "VALUES (101, 'John Doe', 'New York', '2025-01-01', 'Computer Science', 5000)";
            stmt.executeUpdate(insertQuery);
            System.out.println("Data Inserted Successfully!");

            // Step 5: Retrieve Data
            ResultSet rs = stmt.executeQuery("SELECT * FROM student");

            System.out.println("Student Details:");
            while (rs.next()) {
                System.out.println(rs.getInt("stuid") + " | " + rs.getString("stuname") + " | " +
                                   rs.getString("address") + " | " + rs.getDate("joindate") + " | " +
                                   rs.getString("faculty") + " | " + rs.getInt("fee"));
            }

            // Step 6: Close Connection
            con.close();

        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
