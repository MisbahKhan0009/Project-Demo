# Project Demo

## Setting up MySQL:

1.  Download and install MySQL from [here](https://dev.mysql.com/downloads/installer/). Select the server-only option while installing. You can also install the full version, but the server edition suffices. Ensure to check the system requirements. The default username and password for the root user are usually username: admin & password: admin. For simplicity, you can use "admin" for both.

2.  **[Important]** Open CMD as administrator and run:

    ```
    cd C:\Program Files\MySQL\MySQL Server 8.0\bin
    ```

3.  For some reason, I could not use MySQL directly from the root folder of my PC, so I needed to navigate to the MySQL directory as mentioned in step 2. However, you need to repeat step 2 before every session where you do anything on MySQL. I'm trying to solve it; I'll update once I find a solution.

4.  Verify if MySQL is installed properly by running:

    ```
    mysql --version
    ```

    You should see something like "MySQL ver 8.0.36 ...".

5.  Start MySQL server by running:

    ```
    net start MySQL80
    ```

6.  Log in to MySQL by running:

    ```
    mysql -u <username> -p
    ```

    Replace `<username>` with the username of the DB Admin you created during installation. After hitting enter, you will need to enter the password of the DB Admin.

7.  Now your MySQL server is running. Let's check if it's working properly by running any SQL command. Here are some basic commands:

        ```
        show databases;
        ```

    This will show all the databases your server has.

8.  Create a new database named "demo" by running:

    ```
    create database demo;
    ```

9.  If you repeat step 7, you will see the new database named "demo" is added. To add a table in the "demo" database, run:

    ```
    use demo;
    ```

10. Now let's create a table named "users" with columns "id", "username", and "email" by running:

    ```sql
    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50),
        email VARCHAR(100)
    );
    ```

11. Run the following command to see if the "users" table is added:

    ```
    show tables;
    ```

12. Now add some data to the "users" table by running:

    ```sql
    INSERT INTO users (username, email)
    VALUES ('john_doe', 'john@example.com'),
           ('jane_smith', 'jane@example.com'),
           ('alice_wonder', 'alice@example.com');
    ```

13. To see your table, run:

    ```
    select * from users;
    ```

14. For further steps on HTML and PHP, create a new database named "UserInfo" by running:

    ```sql
    create database UserInfo;
    ```

    And then switch to the "UserInfo" database by running:

    ```
    use UserInfo;
    ```

15. Create a table named "usersData" to hold user data by running:
    ```sql
    CREATE TABLE usersData (
        name VARCHAR(100),
        email VARCHAR(100),
        location VARCHAR(100),
        age INT
    );
    ```

MySQL is up and running perfectly. Now let's move on to the HTML and PHP part.

---

HTML, CSS, and PHP files can be found in this repository: index.html, style.css, and database.php.
