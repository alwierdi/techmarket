package com.techmarket.backend.service;


import org.springframework.stereotype.Service;
import com.techmarket.backend.api.model.RegistrationBody;
import com.techmarket.backend.entity.LocalUser;
import com.techmarket.backend.entity.dao.LocalUserDAO;


@Service
public class UserService {

   private LocalUserDAO localuserdao;

   public UserService(LocalUserDAO localuserdao){
    this.localuserdao = localuserdao;
   }

    public LocalUser registerUser(RegistrationBody registrationBody){
        LocalUser user = new LocalUser();
        user.setEmail(registrationBody.getEmail());
        user.setFirstName(registrationBody.getFirstName());
        user.setLastName(registrationBody.getLastName());
        user.setUsername(registrationBody.getUserName());
        // encrypt password
        user.setPassword(registrationBody.getPassword());
        return localuserdao.save(user);
    }
}
