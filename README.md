# PHP Notice: Undefined Variable Bug
This repository demonstrates a common PHP error: "Notice: Undefined variable".  This notice occurs when a variable is used before it has been assigned a value. While not a fatal error, it can lead to unexpected behavior and should be avoided for cleaner code.

## Bug Description
The bug arises when a script attempts to access a variable that has not been initialized. PHP will issue a notice to the console or log indicating the undefined variable, but execution continues.

## How to Reproduce
Clone this repo and run `bug.php`. You will likely observe a notice related to an undefined variable in the output. This is because the variable is used before any assignment.

## Solution
The solution involves initializing the variable before its first use. See `bugSolution.php` for the corrected version of the code.

## Contributing
Contributions are welcome!