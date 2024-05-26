package com.TechMarket.TechMarketProto.entity;

import jakarta.persistence.*;

@Entity
@Table(name = "order_quantity")
public class OrderQuantity {

    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(name = "id",nullable = false)
    private long id;

    @ManyToOne(optional = false)
    @JoinColumn(name = "product_id", nullable = false)
    private Product product;

    @Column(name = "quantity",nullable = false)
    private int quantity;

    @ManyToOne(optional = false)
    @JoinColumn(name = "order_id", nullable = false)
    private WebOrder order;

    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public Product getProduct() {
        return product;
    }

    public void setProduct(Product product) {
        this.product = product;
    }

    public int getQuantity() {
        return quantity;
    }

    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    public WebOrder getOrder() {
        return order;
    }

    public void setOrder(WebOrder order) {
        this.order = order;
    }
}
