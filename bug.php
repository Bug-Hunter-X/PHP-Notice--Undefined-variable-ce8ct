function foo(x) {
  if (x === null) {
    return 0; 
  }
  return x + 1;
}

function bar(x) {
  if (x === null) {
    return null;
  }
  return foo(x);
}

console.log(bar(null)); //Output: null
console.log(bar(5));   //Output: 6
console.log(bar(undefined)); //Output: NaN