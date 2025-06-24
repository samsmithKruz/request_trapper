# Request Trapper

Request Trapper is a simple PHP project that logs all incoming HTTP requests to a file. It is useful for debugging, monitoring, or analyzing web traffic to your local development server.

## How It Works

- All HTTP requests to the project directory are routed to `index.php` using the `.htaccess` file.
- The `Logger` class in `index.php` captures details about each request, including:
  - Timestamp
  - IP address
  - Host
  - HTTP method
  - Request URI
  - Referer
  - User-Agent
- Each request is appended as a new entry in `request.log`.

## Files

- **.htaccess**: Redirects all requests to `index.php`.
- **index.php**: Handles logging of request details.
- **request.log**: Stores the log entries for each request.
- **README.md**: Project documentation.

## Usage

1. Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP).
2. Make sure your web server supports `.htaccess` and has PHP enabled.
3. Access any URL under the project directory in your browser or via HTTP requests.
4. Check `request.log` to see the logged request details.

## Example Log Entry
``` bash
[2025-06-24 19:49:04] IP: ::1 
Host: localhost 
Method: GET 
URI: /request_trapper/wall 
Referer: NONE User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36
```

## License

This project is provided as-is for educational and debugging purposes.