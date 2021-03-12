
window.onload = () => main();

window.onresize = () => main();

function main(){
    const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
    const images = document.getElementsByClassName('blocks-gallery-item');
    
    let IMAGES_PER_ROW = 4;

    if(vw < 600){
        IMAGES_PER_ROW = 2;
    } 
    else if (vw < 1000) {
        IMAGES_PER_ROW = 3;
    }

    loadImages(images).then(i => {
        let arr = chunk(i, IMAGES_PER_ROW);

        for(const row of arr){

            const rowWidth = row.map(img => img.aspectRatio).reduce((a,c) => (a + c));

            let cal = 0.0;
            for (const img of row){
                const width = (100*img.aspectRatio/rowWidth).toFixed(2);
                img.imageElement.style = `width: ${width-5.0}%; margin: .5%`;
                cal+=Number(width);
            }
        }

        let cover = document.getElementById('cover');
        cover.style.visibility = "hidden";
    })
}

function chunk(inputArr, itemsPerChunk){
    let retArr = [];
    let arr = [];
    for (let i = 0; i < inputArr.length; i++){
        arr.push(inputArr[i]);
        if((i + 1) % itemsPerChunk === 0){
            retArr.push(arr);
            arr = [];
        }
    }
    return retArr;
}

async function loadImages(images){

    let newImages = [];
    const promiseArray = [];

    for(const image of images){
        const imageSrc = image.children[0].children[0].src;

        const img = new Image();
        img.src = imageSrc;

        promiseArray.push(new Promise(resolve => {
                img.onload = () => {
                    newImages.push({
                        imageElement: image, 
                        aspectRatio: img.width/img.height
                    });
                    resolve();
                }
            }));
    }
    await Promise.all(promiseArray);

    return newImages;
}
