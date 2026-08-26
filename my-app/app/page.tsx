export default async function App() {
  type Data = {
    "id": number;
    "name": string;
    "class_name": string;
    "gender": string;
    "age": number;
    "class_desc": string;
  }
  const respnse = await fetch("http://127.0.0.1:8000/students")
  const data: Data = await respnse.json()

  return (
    <>
      <div className="card border-4 border-amber-500 p-3.5 items-center">
        <h1 className="card border-4 border-amber-500 p-2">{data.name}</h1>
        <ul>
          <li><h2>Gender: { data.gender }</h2></li>
          <li><h3>Age: {data.age}</h3></li>
          <li><h4>Class: {data.class_name}</h4></li>
          <pre>Class Description: { data.class_desc }</pre>
        </ul>
      </div>
    </>
  )
}