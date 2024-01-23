# how to use jwt token for authentication and authorization in Laravel?

### install PHP-JWT library 
```php
composer require firebase/php-jwt
```

### .env
```
JWT_KEY=123xyz
```

### App\Helper\JWTToken.php

```php
class  JWTToken
{
//function for creating jwt token
    static function createToken($email): string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'lara-vel-token',
            'iat' => time(),
            'exp' => time() + 60 * 60,
            'userEmail' => $email,


        ];

        return JWT::encode($payload, $key, 'HS256');
    }
//function for decoding and verifying the token.
    static function decodeToken($token)
    {
        try {

            if ($token == null) {
                return "Unauthorized";
            } else {

                $key = env('JWT_KEY');

                return JWT::decode($token, new Key($key, 'HS256'));
            }



        } catch (Exception $exception) {
            return "Unauthorized";
        }
    }

```

### userController.php

```php
//when user logins,a token created with the email as parameter
$token= JWTToken::createToken($request->input('email'));

//token passing as cookie to the client
         return response()->json([status' => 'Success', 'message' => "login successful", ])
         ->cookie('token',$token,time()+60*60);

```
### tokenMiddleware.php

```php
public function handle(Request $request, Closure $next): Response
    {
//    received the token as cookie from the userController.php
        $token = $request->cookie('token');
//        verify and decode the token
        $result = JWTToken::decodeToken($token);

        if ($result === "Unauthorized") {
            return redirect("/loginPage");
        } else {
  //  This line sets a custom HTTP header named 'email' in the request.
  //we can use this email by $request->header('email).
  
            $request->headers->set('email', $result->userEmail);
//            $request->headers->set('id', $result->id);

            return $next($request);
        }


    }

```
### web/api routes
```php
//Restrict unauthorized User using middleware 
Route::view('/profilePage','pages.profile')->middleware([tokenMiddleware::class]);
Route::get('/logOut',[userController::class,'logOut'])->middleware([tokenMiddleware::class]);
```
