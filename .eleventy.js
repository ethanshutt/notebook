module.exports = function (eleventyConfig) {

    eleventyConfig.addPassthroughCopy("site/assets/images");
    eleventyConfig.addPassthroughCopy("site/assets/stylesheets");
    eleventyConfig.addPassthroughCopy("site/assets/scripts");

    
    return {
        pathPrefix: "/",
        htmlTemplateEngine: 'njk',
        markdownTemplateEngine: 'md',
        templateFormats: ["html", "liquid", "njk"],
        dir: {
            includes: "./_includes",
            input: "./site",
            output: "./docs",
            layouts: "./_layouts"
        }
    }
}