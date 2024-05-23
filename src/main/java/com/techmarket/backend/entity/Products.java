package com.techmarket.backend.entity;



import jakarta.persistence.CascadeType;
import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;

@Entity
@Table(name="Products")
public class Products {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="Product_Id")
    private int Product_Id;

    @Column(name="Product_name")
    private String Product_name;

    @Column(name="Description")
    private String Description;

    @Column(name="Price")
    private double Price;

    @OneToOne(mappedBy = "products", cascade = CascadeType.REMOVE, optional = false, orphanRemoval = true)
    private Inventory inventory;

    
    public Products(int product_Id, String product_name, String description, double price, Inventory inventory) {
        Product_Id = product_Id;
        Product_name = product_name;
        Description = description;
        Price = price;
        this.inventory = inventory;
    }


    public Products() {
    }


    public int getProduct_Id() {
        return Product_Id;
    }


    public void setProduct_Id(int product_Id) {
        Product_Id = product_Id;
    }


    public String getProduct_name() {
        return Product_name;
    }


    public void setProduct_name(String product_name) {
        Product_name = product_name;
    }


    public String getDescription() {
        return Description;
    }


    public void setDescription(String description) {
        Description = description;
    }


    public double getPrice() {
        return Price;
    }


    public void setPrice(double price) {
        Price = price;
    }


    public Inventory getInventory() {
        return inventory;
    }


    public void setInventory(Inventory inventory) {
        this.inventory = inventory;
    }

    
    
}
