document.addEventListener('DOMContentLoaded', () => {
    const productContainers = document.querySelectorAll('.product-container');
    const nxtBtn = document.querySelectorAll('.nxt-btn');
    const preBtn = document.querySelectorAll('.pre-btn');

    productContainers.forEach((container, index) => {
        const scrollWidth = container.scrollWidth;
        const containerWidth = container.clientWidth;

        nxtBtn[index].addEventListener('click', () => {
            container.scrollTo({
                left: container.scrollLeft + containerWidth,
                behavior: 'smooth'
            });
        });

        preBtn[index].addEventListener('click', () => {
            container.scrollTo({
                left: container.scrollLeft - containerWidth,
                behavior: 'smooth'
            });
        });
    });
});
