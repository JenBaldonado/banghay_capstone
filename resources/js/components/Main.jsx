import React,{useState, useEffect} from 'react';
import ReactDOM from 'react-dom';
import Axios from 'axios';


   

const option = {
  method: 'GET',
  url: 'https://news-on-education.p.rapidapi.com/',
  headers: {
    'X-RapidAPI-Key': '7a344da9f5mshe2dffd98b2fd006p15a7c5jsn9dbe5cb9631d',
    'X-RapidAPI-Host': 'news-on-education.p.rapidapi.com'
  }
}; 
     
     
function App(){
  
      const [articles, setArticles] = useState([]);
      const [error, setError] = useState();

      useEffect(() => {
        Axios.request(option).then(function(response) {
          console.log(response.data);
          setArticles(response.data);
        }).catch(function (error) {
          setError(error)
        });
      }, []);

      if (error) {
        return <div className="text-center m-auto">Sorry something went wrong!</div>
      }


     return (
        <div>
            {articles.slice(0,2).map((post) => (
              <div key={post.id} className="card w-100 m-2">
                <h1 className="p-2 text-black">{post.title}</h1>
                <a className="p-2" href={post.url} target="_blank">Read more ...</a>
              </div>
              
            ))}
        </div>
                          
    );
  }


  //In every click of the button access the title from json to display on screen

export default App;

if (document.getElementById('article')) {
    ReactDOM.render(<App />, document.getElementById('article'));
}





/* 

      const [articles, setArticles] = useState("");

      useEffect(() => {
        const getArticles = async () => {
          const articlesFormServer = await fetchArticles() 
          setArticles(articlesFormServer)

        }

        getArticles();

      })

      //fetch articles 
      const fetchArticles = async () => {
        const res = await fetch('https://news-on-education.p.rapidapi.com/', {
          method: 'GET',
          headers: {
            'X-RapidAPI-Key': '7a344da9f5mshe2dffd98b2fd006p15a7c5jsn9dbe5cb9631d',
            'X-RapidAPI-Host': 'news-on-education.p.rapidapi.com'
          }
        })
        const data = await res.json();
        console.log(data)
        //return data
      }
      //fetch article
      


      return (

        //<Header />
       <div className="container tex-center mx-5">
            <button type="submit" className="btn btn-primary" onClick={() => fetchArticles()}>Get Random Article</button>
            <h1>{articles}</h1>
        </div> )

    }
 */