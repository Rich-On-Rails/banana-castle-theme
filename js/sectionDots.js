// Function to create the dots based on the number of sections after the cover, excluding the footer
function createSectionDots() {
    const sections = document.querySelectorAll('section');
    const sectionDots = document.getElementById('section-dots');
    const coverSection = document.getElementById('home'); // Assuming the cover section has the ID 'home'
    const coverHeight = coverSection.clientHeight;
    let dots = [];

    sections.forEach((section, index) => {
        if (section !== coverSection && !section.classList.contains('footer')) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            dot.addEventListener('click', () => {
                // Scroll to the corresponding section when a dot is clicked
                section.scrollIntoView({ behavior: 'smooth' });
            });
            sectionDots.appendChild(dot);
            dots.push(dot);
        }
    });

    // Add scroll event listener to show/hide the dots and update the active dot
    window.addEventListener('scroll', () => {
        if (window.scrollY >= coverHeight) {
            sectionDots.style.display = 'block';
        } else {
            sectionDots.style.display = 'none';
        }

        // Update the active dot
        dots.forEach((dot, index) => {
            const boundingBox = sections[index + 1].getBoundingClientRect();
            if (boundingBox.top <= 150 && boundingBox.bottom >= 150) {
                // Add the 'active-dot' class to the corresponding dot
                dot.classList.add('active-dot');
            } else {
                // Remove the 'active-dot' class from other dots
                dot.classList.remove('active-dot');
            }
        });
    });
}

// Call the function to create the dots
createSectionDots();