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
@Table(name="OrderQuantity")
public class OrderQuantity {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="ORQuantity_Id")
    private int ORQuantity_Id;

    @ManyToOne(optional = false)
    @JoinColumn(name = "product_Id", nullable = false)
    private Products products;

    @Column(name="Quantity")
    private int Quantity;

    @ManyToOne(optional = false)
    @JoinColumn(name = "Order_id",nullable = false)
    private WebOrder order;


    public OrderQuantity(int oRQuantity_Id, Products products, int quantity, WebOrder order) {
        ORQuantity_Id = oRQuantity_Id;
        this.products = products;
        Quantity = quantity;
        this.order = order;
    }

    public OrderQuantity() {
    }

    public int getORQuantity_Id() {
        return ORQuantity_Id;
    }

    public void setORQuantity_Id(int oRQuantity_Id) {
        ORQuantity_Id = oRQuantity_Id;
    }

    public Products getProducts() {
        return products;
    }

    public void setProducts(Products products) {
        this.products = products;
    }

    public int getQuantity() {
        return Quantity;
    }

    public void setQuantity(int quantity) {
        Quantity = quantity;
    }

    public WebOrder getOrder() {
        return order;
    }

    public void setOrder(WebOrder order) {
        this.order = order;
    }

    

}
