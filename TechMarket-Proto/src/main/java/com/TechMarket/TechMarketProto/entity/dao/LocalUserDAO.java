package com.TechMarket.TechMarketProto.entity.dao;

import com.TechMarket.TechMarketProto.entity.LocalUser;
import org.springframework.data.repository.CrudRepository;
import java.util.Optional;

public interface LocalUserDAO extends CrudRepository<LocalUser, Long> {

    Optional<LocalUser> findByUsernameIgnoreCase(String username);
    Optional<LocalUser> findByEmailIgnoreCase(String email);

}
