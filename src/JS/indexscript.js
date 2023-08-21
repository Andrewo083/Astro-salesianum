let slide = document.getElementById("slide")
                    let img = document.getElementById('img')
                    let menuu = document.getElementById('menuu')
                    slide.addEventListener('click', () => {
                      slide.classList.add("left-[-500px]")
                      slide.classList.add("absolute")
                      img.classList.remove('hidden')
                      menuu.classList.remove('justify-center')
                      menuu.classList.add('justify-between')
                    })

                    img.addEventListener('click', () => {
                      slide.classList.remove("left-[-500px]")
                      slide.classList.remove("absolute")
                      img.classList.add('hidden')
                      
                      menuu.classList.add('justify-center')
                      menuu.classList.remove('justify-between')
                    })