/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package formSiswa;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.Statement;
import java.sql.ResultSet;
import java.sql.SQLException;
/**
 *
 * @author Gatra
 */
public class crud {
    private String id, nama, alamat;
    private Connection c;
    private PreparedStatement ps;
    private Statement s;
    private ResultSet rs;
    private String query;
    private String x = "[JDBC]: ";
    
    public crud() {
        try {
            mysql_connection koneksi = new mysql_connection();
            c = koneksi.getKoneksi();
        } catch (SQLException se) {
            System.out.println(x + se);
        }
    }
    
    // variables
    public void setID(String id) {
        this.id = id;
        id = null;
    }
    
    public void setNama(String nama) {
        this.nama = nama;
        nama = null;
    }
    
    public void setAlamat(String alamat) {
        this.alamat = alamat;
        alamat = null;
    }
    
    public String getID() {
        return id;
    }
    
    public String getNama() {
        return nama;
    }
    
    public String getAlamat() {
        return alamat;
    }
    
    // actions
    public ResultSet tampilData() {
        query = "SELECT * FROM murid";
        try {
            s = c.createStatement();
            rs = s.executeQuery(query);
        } catch (Exception e) {
            System.out.println(x + e);
        }
        return rs;
    }
    
    public void simpanData(String id, String nama, String alamat) {
        query = "INSERT INTO murid VALUES (?,?,?)";
        try {
            ps = c.prepareStatement(query);
            ps.setString(1, id);
            ps.setString(2, nama);
            ps.setString(3, alamat);
            ps.executeUpdate();
            ps.close();
        } catch (Exception e) {
            System.out.println(x + e);
        }
    }
    
    public void ubahData(String id, String nama, String alamat) {
    query = "UPDATE murid SET nama = ?, alamat = ? WHERE id = ?";
    try {
        ps = c.prepareStatement(query);
        ps.setString(1, nama);
        ps.setString(2, alamat);
        ps.setString(3, id);
        ps.executeUpdate();
        ps.close();
    } catch (Exception e) {
        System.out.println(x + e);
    }
}
    
    public void hapusData(String id) {
        query = "DELETE FROM murid WHERE id = ?";
        try {
            ps = c.prepareStatement(query);
            ps.setString(1, id);
            ps.executeUpdate();
            ps.close();
        } catch (Exception e) {
            System.out.println(x + e);
        }
    }
}
