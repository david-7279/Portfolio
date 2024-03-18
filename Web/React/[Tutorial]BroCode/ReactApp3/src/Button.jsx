
function Button(){

  const styles ={
    backgroundColor: "#fff",
    color: "#000000",
    padding: "10px 20px",
    borderRadius: "8px",
    border: "none",
    boxShadow: "0 0.5rem 1rem rgba(132, 139, 200, 0.18)",
    cursor: "pointer",
  }
  return (
    <button style={styles}>Click me</button>
  )
}

export default Button;