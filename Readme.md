## Data Mapper Design Pattern in PHP 

- It transfers the data between persistent layer and in memory layer.
- It keeps the in memory layer and the persistent data layer independent of each other.

### Persistance Layers
- Json place holder api
- Base url: https://jsonplaceholder.typicode.com
- Sample data: https://jsonplaceholder.typicode.com/users/1

### In memory Layers
```
User {
    getId
    getEmail
}
```

### Mapper
We will implement ```UserMapper``` class in order to map external api data in to ```User``` class and vise versa.


### YouTube link
[https://youtu.be/oaiwS5KFHEs](https://youtu.be/oaiwS5KFHEs)
