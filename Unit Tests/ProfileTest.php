<?php
    include_once 'utility.php';
    include_once 'profile.php';

    use PHPUnit\Framework\Testcase;

    /**
     * Class: Profile Test
     * <p>
     * Tests the various functionalities of the Profile Class.
     */
    final class ProfileTest extends TestCase
    {
        /****************************************************************
         * Funciton: testCanGetUser
         * Tests whether or not the Profile object can accurately fectch
         * existing users in the database.
         ****************************************************************/
        public function testCanGetUser()
        {
            // Case #1 : Get Correct Existing User
            $prof = new Profile("jrj268");
            assert( $prof->getUser() == "jrj268");
            echo("testCanGetUser Case #1------Passed\n");
            
            // Case #2 : Does Not Set Non-Existing User
            $prof = new Profile("26");
            assert( $prof->getUser() == "");
            echo("testCanGetUser Case #2------Passed\n");
            $this->addToAssertionCount(1);
        }

        /****************************************************************
         * Funciton: testCanGetEmail
         * Tests whether or not the Profile object can accurately fectch
         * existing user emails from the database.
         ****************************************************************/
        public function testCanGetEmail()
        {
            $prof = new Profile("jrj268");
            assert( $prof->getEmail() == "jrj268@nau.edu" );
            echo("testCanGetEmail------Passed\n");
            $this->addToAssertionCount(1);
        }

        /****************************************************************
         * Funciton: testCanGetEmail
         * Tests whether or not the Profile object can accurately fectch
         * existing user types from the database.
         ****************************************************************/
        public function testCanGetType()
        {
            echo("Test Start: canGetType()\n");

            $prof = new Profile("jrj268");
            assert( $prof->getType() == '3' );
            echo("\tType ID for user jrj268 correctly fetched as 3.\n");

            $prof = new Profile("iLovePandas");
            assert( $prof->getType() == '1' );
            echo("\tType ID for user iLovePandas correctly fetched as 1.\n");

            $prof = new Profile("Iroh");
            assert( $prof->getType() == '1' );
            echo("\tType ID for user Iroh correctly fetched as 1.\n");

            echo("testCanGetType------Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanGetDescript
         * Tests whether or not the Profile object can accurately fectch
         * existing user descriptions from the database.
         ****************************************************************/
        public function testCanGetDescript()
        {
            echo("Test Start: canGetDescript()\n");

            $prof = new Profile("jrj268");
            assert( $prof->getDescript() == "I love Japan!");
            echo("\tProfile description for user jrj268 correctly returned as 'I love Japan!'\n");
            
            $prof = new Profile("iLovePandas");
            assert( $prof->getDescript() == '' );
            echo("\tProfile description for user iLovePandas correctly returned as NULL\n");

            $prof = new Profile("Iroh");
            assert( $prof->getDescript() == '' );
            echo("\tProfile description for user Iroh correctly returned as Null\n");

            echo("testCanGetDescript------Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanValidatePassword
         * Tests whether or not the Profile object can accurately validate
         * and/or invalidate a given password value for a user.
         ****************************************************************/
        public function testcanValidatePassword()
        {
            echo("Test Start: canValidatePassword()\n");

            $prof = $this->createMock( 'Profile' );

            assert( $prof->validatePassword("123") );
            echo("\t Password succesfully validated for user jrj268 on correct pass-in.\n");

            assert( !$prof->validatePassword("12") );
            echo("\t Password succesfully invalidated for user jrj268 on incorrect pass-in.\n");

            $prof = $this->createMock( 'Profile' );
            assert( $prof->validatePassword("34567") );
            echo("\t Password succesfully validated for user iLovePandas on correct pass-in.\n");

            assert( !$prof->validatePassword("345") );
            echo("\t Password succesfully invalidated for user iLovePandas on incorrect pass-in.\n");

            echo("testcanValidatePassword------Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanFetchFavorite
         * Tests whether or not the Profile object can accurately fectch
         * existing user favorite categories.
         ****************************************************************/
        public function testCanFetchFavorite()
        {
            echo("Test Start: canFetchFavorite()\n");

            $prof = new Profile("turtlemurtle");
            $nameArray = $prof->showFavorited();
            assert( $nameArray[0] == "Travel");
            echo("\tFavorite category successfully fetched for user turtlemurtle as 'Travel'.\n");

            echo("testCanFetchFavorite------Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanSetEmail
         * Tests whether or not the Profile object can accurately set
         * existing user emails to a new e-mail.
         ****************************************************************/
        public function testCanSetEmail()
        {
            echo("Test Start: canSetEmail()\n");

            $prof = new Profile("jrj268");

            $prof->setEmail("jrj268@gmail.com");
            assert( $prof->getEmail() == "jrj268@gmail.com");
            echo("\tEmail for user jrj268 correctly set to 'jrj268@gmail.com'\n");

            $prof->setEmail("jrj268@nau.edu");
            echo("testcanSetEmail-----Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanSetEmail
         * Tests whether or not the Profile object can accurately set
         * existing user descriptions to a new description.
         ****************************************************************/
        public function testCanSetDescript()
        {
            echo("Test Start: canSetDescript()\n");

            $prof = new Profile("turtlemurtle");

            $prof->setDescript("I love turtles!");
            assert( $prof->getDescript() == "I love turtles!" );
            echo("\tProfile description for user turtlemurtle correctly set to 'I love turtles!'\n");

            $prof->setDescript("");
            echo("testCanSetDescript-----Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanSetEmail
         * Tests whether or not the Profile object can accurately set
         * existing user types to a new type.
         ****************************************************************/
        public function testCanSetType()
        {
            echo("Test Start: canSetType()\n");

            $prof = new Profile("jrj268");
            
            $prof->setType('turtlemurtle', 3 );
            $prof = new Profile("turtlemurtle");

            assert( $prof->getType() == 3 );
            echo("\tProfile type for user turtlemurtle correctly set to '3'\n");

            $prof = new Profile("jrj268");
            $prof->setType('turtlemurtle', 1 );

            echo("testCanSetType()-----Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanSetEmail
         * Tests whether or not the Profile object can accurately
         * favorite a category for a user.
         ****************************************************************/
        public function testcanFavorite()
        {
            echo("Test Start: canFavorite()\n");

            $prof = $this->createMock( 'Profile' );

            $prof->favorite("1");
            $favorites = $prof->showFavorited();
            assert( $favorites[0] == "Travel" );
            echo("\tFavorites succesfully updated for use jrj268 to include 'Travel'\n");

            echo("testCanFavorite-----Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanSetEmail
         * Tests whether or not the Profile object can accurately unfavorite
         * a category for a user.
         ****************************************************************/
        public function testCanUnfavorite()
        {
            echo("Test Start: canUnfavorite()\n");

            $prof = new Profile("jrj268");

            $prof->unfavorite("1");
            $favorites = $prof->showFavorited();
            assert( sizeof( $favorites ) == 0 );
            echo("\tFavorite category 'Travel' successfully deleted for the user jrj268.\n");

            echo("testCanUnfavorite-----Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanSetEmail
         * Tests whether or not the Profile object can accurately create
         * a new user.
         ****************************************************************/
        public function testCanCreateProfile()
        {
            $prof = new Profile("jrj268");

            $prof->createProfile( "testUser", "12345", "test@gmail.com", 1 );
            $prof = new Profile("testUser");
            assert($prof->getUser() == "testUser");
            echo("\tProfle testUser succesfully created on profile table.\n");

            echo("testCanCreateProfile-----Passed\n");
            $this->addToAssertionCount(1);
        }

         /****************************************************************
         * Funciton: testCanSetEmail
         * Tests whether or not the Profile object can accurately delete
         * a user.
         ****************************************************************/
        public function testcanDeleteProfile()
        {
            echo("Test Start: canDeleteProfile()\n");

            $prof = new Profile("jrj268");

            $prof->deleteProfile("testUser");
            $prof = new Profile("testUser");
            assert($prof->getUser() == "");

            echo("\ttestCanDeleteProfile-----Passed\n");
            $this->addToAssertionCount(1);
        }
    }
?>