package com.TechMarket.TechMarketProto.service;

import com.TechMarket.TechMarketProto.api.model.LoginBody;
import com.TechMarket.TechMarketProto.api.model.RegistrationBody;
import com.TechMarket.TechMarketProto.entity.LocalUser;
import com.TechMarket.TechMarketProto.entity.dao.LocalUserDAO;
import com.TechMarket.TechMarketProto.exception.UserAlreadyExistsException;

import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

@Service
public class UserService {
    private LocalUserDAO localUserDAO;
    private EncryptionService encryptionService;
    private JWTService jwtService;

    @Autowired
    public UserService(LocalUserDAO localUserDAO,EncryptionService encryptionService, JWTService jwtService) {
        this.localUserDAO = localUserDAO;
        this.encryptionService = encryptionService;
        this.jwtService = jwtService;
    }

    public void registerUser(RegistrationBody registrationBody) throws UserAlreadyExistsException {

        if (localUserDAO.findByEmailIgnoreCase(registrationBody.getEmail()).isPresent()
                || localUserDAO.findByUsernameIgnoreCase(registrationBody.getUsername()).isPresent()) {
            throw new UserAlreadyExistsException();
        }

        LocalUser user = new LocalUser();
        user.setUsername(registrationBody.getUsername());
        user.setEmail(registrationBody.getEmail());
        //TODO: bycpyt password
        user.setPassword(encryptionService.encryptPassword(registrationBody.getPassword()));
        localUserDAO.save(user);
    }

    public String loginUser(LoginBody loginBody){
        Optional<LocalUser> opUser = localUserDAO.findByUsernameIgnoreCase(loginBody.getUsername());
        if(opUser.isPresent()){
            LocalUser user = opUser.get();
            if (encryptionService.verifyPassword(loginBody.getPassword(), user.getPassword())) {
                return jwtService.generateJWT(user);
            }
        }
        return null;
    }

}
