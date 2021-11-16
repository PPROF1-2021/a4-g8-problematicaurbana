
package configuracion;

import java.sql.*;

public class Conexion {
    
    Connection conexion;
    
    public Conexion () {
       
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            conexion=DriverManager.getConnection("jdbc:mysql://localhost:3306/miobservador", "root", "");
            
        } catch (Exception e) {
           
        }
        
        
    }
    
    public Connection getConnection () {
            return conexion;
        }
}
