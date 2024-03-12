export const apiController = async (obj) => {
  try{
    const res = await fetch("/api/apiHandle.php", {
        "method": "POST",
        "headers": {
            "Content-Type": "application/json; charset=utf-8"
        },
        "body": JSON.stringify(obj)
    })
    const data = await res.json();

    return data;
  }catch(err){
    console.log(`Error: ${err}`);

    return null;
  }
}


// (async () => {
//   try {
//     const result = await apiController(user);
//     console.log(result.boxof); // 여기에서 데이터를 처리
//     document.write(result.boxof[0].seatcnt)
//   } catch (error) {
//     console.error('Error fetching data:', error);
//   }
// })();