import ProfilePicture from './assets/Cat.jpg'

function Card(){
  return(
    <div className="card">
      <img className="cardImage" src={ProfilePicture} alt="Profile Picture" />
      <h2 className="cardTitle">David</h2>
      <p className="cardText">Engenharia de Informática and read books</p>
    </div>
  );
}

export default Card;