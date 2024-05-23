package com.techmarket.backend.entity;


import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.Table;

@Entity
@Table(name="Adress")
public class Address {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="Adress_Id")
    private int Addres_Id;

    @Column(name="Addres_Line")
    private String AdressLine;

    @ManyToOne(optional = false)
    @JoinColumn(name = "User_Id", nullable = false)
    private LocalUser user;


    public Address(int addres_Id, String adressLine, LocalUser user) {
        Addres_Id = addres_Id;
        AdressLine = adressLine;
        this.user = user;
    }

    public Address() {
    }

    public int getAddres_Id() {
        return Addres_Id;
    }

    public void setAddres_Id(int addres_Id) {
        Addres_Id = addres_Id;
    }

    public String getAdressLine() {
        return AdressLine;
    }

    public void setAdressLine(String adressLine) {
        AdressLine = adressLine;
    }

    public LocalUser getUser() {
        return user;
    }

    public void setUser(LocalUser user) {
        this.user = user;
    }

    
}
