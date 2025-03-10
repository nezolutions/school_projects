/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package formSiswa;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

/**
 *
 * @author Gatra
 */
public class mysql_connection {
    private Connection koneksi;
    private final String driver = "com.mysql.jdbc.Driver";
    private final String jdbc = "jdbc:mysql://";
    private final String host = "localhost:";
    private final String port = "3306/";
    private final String database = "crud";
    private final String url = jdbc + host + port + database;
    private final String username = "root";
    private final String password = "";
    
    public Connection getKoneksi() throws SQLException {
        String x = "[JDBC]: ";
        if (koneksi == null) {
            try {
                Class.forName(driver);
                System.out.println(x + "driver has found.");
                try {
                    koneksi = DriverManager.getConnection(url, username, password);
                    System.out.println(x + "database connected successfully.");
                } catch (SQLException e) {
                    System.out.println(x + "database failed to connect.");
                }
            } catch (ClassNotFoundException ex) {
                System.out.println(x + "driver not found.");
            }
        }
        return koneksi;
    }
}
