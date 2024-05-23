package com.techmarket.backend.entity;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;

@Entity
@Table(name="Inventory")
public class Inventory {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="Invetory_Id")
    private int Invetori_Id;
    
    @OneToOne(optional = false, orphanRemoval = true)
    @JoinColumn(name="Product_Id",nullable = false,unique = true)
    private Products products;

    @Column(name="Product_Quantity")
    private int Product_Quantity;

    public Inventory(int invetori_Id, Products products) {
        Invetori_Id = invetori_Id;
        this.products = products;
    }

    public Inventory() {
    }

    public int getInvetori_Id() {
        return Invetori_Id;
    }

    public void setInvetori_Id(int invetori_Id) {
        Invetori_Id = invetori_Id;
    }

    public Products getProducts() {
        return products;
    }

    public void setProducts(Products products) {
        this.products = products;
    }

    

}
