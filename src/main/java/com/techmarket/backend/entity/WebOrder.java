package com.techmarket.backend.entity;



import java.util.List;

import jakarta.persistence.CascadeType;
import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.JoinColumn;
import jakarta.persistence.ManyToOne;
import jakarta.persistence.OneToMany;
import jakarta.persistence.Table;

@Entity
@Table(name="Web_Order")
public class WebOrder {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name="Order_Id")
    private int Order_Id;
    

    @ManyToOne(optional = false)
    @JoinColumn(name = "Address_id", nullable = false)
    private Address address;

    @ManyToOne(optional = false)
    @JoinColumn(name = "User_Id",nullable = false)
    private LocalUser user;

    @OneToMany(mappedBy = "order",cascade = CascadeType.REMOVE,orphanRemoval = true)
    private List<OrderQuantity> quantities;
    

    public WebOrder() {
    }

    public int getOrder_Id() {
        return Order_Id;
    }

    public void setOrder_Id(int order_Id) {
        Order_Id = order_Id;
    }

    public Address getAddress() {
        return address;
    }

    public void setAddress(Address address) {
        this.address = address;
    }

    public List<OrderQuantity> getQuantities() {
        return quantities;
    }

    public void setQuantities(List<OrderQuantity> quantities) {
        this.quantities = quantities;
    }

    public LocalUser getUser() {
        return user;
    }

    public void setUser(LocalUser user) {
        this.user = user;
    }
    
}
