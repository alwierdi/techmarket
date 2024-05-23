package com.techmarket.backend.entity.dao;



import org.springframework.data.repository.CrudRepository;
import com.techmarket.backend.entity.LocalUser;

public interface LocalUserDAO  extends CrudRepository<LocalUser, Integer>{

    // Optional<LocalUser> findByUsernameIgnoreCase(String username);
    // Optional<LocalUser> findByEmailIgnoreCase(String email);

}
